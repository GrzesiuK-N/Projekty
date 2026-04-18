import random
import datetime
import os
import csv

# konfiguracja
NUM_SKINS = 1000
NUM_USERS = 10
NUM_OWNERSHIPS = 200
OUTPUT_SQL = "generate_skinhub.sql"

random.seed(41)

games = [
    ("Counter-Strike 2", "Valve", 100),
    ("Valorant", "Riot Games", 98),
    ("Fortnite", "Epic Games", 95),
    ("Apex Legends", "Respawn Entertainment", 93),
    ("PUBG", "Krafton", 90),
    ("Call of Duty: Warzone", "Activision", 89),
    ("League of Legends", "Riot Games", 88),
    ("Dota 2", "Valve", 85),
    ("Overwatch 2", "Blizzard", 83),
    ("Rainbow Six Siege", "Ubisoft", 82),
    ("Rust", "Facepunch", 80),
    ("Team Fortress 2", "Valve", 78),
    ("Escape from Tarkov", "Battlestate Games", 76),
    ("Battlefield V", "EA", 75),
    ("Palworld", "Pocketpair", 73),
    ("The Finals", "Embark Studios", 70),
    ("Destiny 2", "Bungie", 68),
    ("Warframe", "Digital Extremes", 67),
    ("GTA Online", "Rockstar", 65),
    ("Minecraft", "Mojang", 60),
]

rarities = [("pospolity", 0.6), ("rzadki", 0.25), ("epicki", 0.1), ("legendarny", 0.05)]

adjectives = ["Shadow","Crimson","Azure","Golden","Silent","Prime","Dragon","Obsidian","Nebula","Solar","Phantom","Vortex","Galactic","Spectral","Radiant","Frost","Inferno","Eternal","Lucid","Mythic"]
nouns = ["Blade","Vandal","Hunter","Lore","Glider","Phaser","Rift","Wing","Striker","Reaper","Pulse","Engineer","Sentinel","Raven","Saber","Dread","Aegis","Warden","Prowler","Champion"]
suffixes = ["MK-II","2025","Edition","XR","Prime","Variant","X","V","Ultra","Classic"]

price_ranges = {
    "pospolity": (0.50, 5.00),
    "rzadki": (5.01, 50.00),
    "epicki": (50.01, 300.00),
    "legendarny": (300.01, 2000.00)
}

def weighted_choice(choices):
    items, weights = zip(*choices)
    total = sum(weights)
    r = random.random() * total
    upto = 0
    for item, w in zip(items, weights):
        if upto + w >= r:
            return item
        upto += w
    return items[-1]

def gen_skin_name():
    parts = [random.choice(adjectives), random.choice(nouns)]
    if random.random() < 0.4:
        parts.append(random.choice(suffixes))
    return " ".join(parts)

def gen_price(rarity):
    lo, hi = price_ranges[rarity]
    return round(random.uniform(lo, hi), 2)

def escape_sql(s):
    return s.replace("'", "''")

def make_sql():
    skins = []
    game_weights = [g[2] for g in games]
    game_choices = [(i+1, game_weights[i]) for i in range(len(games))]

    for i in range(NUM_SKINS):
        name = gen_skin_name()
        gid = weighted_choice(game_choices)
        rarity = weighted_choice(rarities)
        price = gen_price(rarity)
        description = "Skin '{}' dla gry {}, rzadkosc: {}.".format(name, games[gid-1][0], rarity)
        skins.append({
            "nazwa": name,
            "id_gry": gid,
            "rzadkosc": rarity,
            "cena": price,
            "opis": description
        })

    users = []
    for i in range(NUM_USERS):
        uname = "user_{}{}".format(random.choice(['Shadow','Ace','Ghost','Nova','Rift','Vex','Blade','Echo','Zero','Flux']), random.randint(10,999))
        email = "{}@example.com".format(uname.lower())
        users.append({"login": uname, "email": email})

    ownerships = set()
    while len(ownerships) < NUM_OWNERSHIPS:
        uid = random.randint(1, NUM_USERS)
        sid = random.randint(1, NUM_SKINS)
        ownerships.add((uid, sid))
    ownerships = list(ownerships)

    lines = []
    lines.append("-- Generated: {}".format(datetime.datetime.utcnow().isoformat() + "Z"))
    lines.append("CREATE DATABASE IF NOT EXISTS skinhub CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;")
    lines.append("USE skinhub;")
    lines.append("SET FOREIGN_KEY_CHECKS=0;")
    lines.append(
        "CREATE TABLE IF NOT EXISTS gry (\n"
        "  id_gry INT AUTO_INCREMENT PRIMARY KEY,\n"
        "  nazwa VARCHAR(100) NOT NULL,\n"
        "  producent VARCHAR(100),\n"
        "  popularnosc INT DEFAULT 0\n);"
    )
    lines.append(
        "CREATE TABLE IF NOT EXISTS skiny (\n"
        "  id_skinu INT AUTO_INCREMENT PRIMARY KEY,\n"
        "  nazwa VARCHAR(100) NOT NULL,\n"
        "  id_gry INT NOT NULL,\n"
        "  rzadkosc ENUM('pospolity','rzadki','epicki','legendarny') NOT NULL,\n"
        "  cena DECIMAL(10,2),\n"
        "  opis TEXT,\n"
        "  FOREIGN KEY (id_gry) REFERENCES gry(id_gry)\n);"
    )
    lines.append(
        "CREATE TABLE IF NOT EXISTS uzytkownicy (\n"
        "  id_uzytkownika INT AUTO_INCREMENT PRIMARY KEY,\n"
        "  login VARCHAR(50) UNIQUE NOT NULL,\n"
        "  email VARCHAR(100) UNIQUE NOT NULL,\n"
        "  data_rejestracji DATE DEFAULT (CURRENT_DATE)\n);"
    )
    lines.append(
        "CREATE TABLE IF NOT EXISTS posiadane_skiny (\n"
        "  id_relacji INT AUTO_INCREMENT PRIMARY KEY,\n"
        "  id_uzytkownika INT NOT NULL,\n"
        "  id_skinu INT NOT NULL,\n"
        "  data_zdobycia DATE DEFAULT (CURRENT_DATE),\n"
        "  FOREIGN KEY (id_uzytkownika) REFERENCES uzytkownicy(id_uzytkownika),\n"
        "  FOREIGN KEY (id_skinu) REFERENCES skiny(id_skinu)\n);"
    )
    lines.append("SET FOREIGN_KEY_CHECKS=1;")

    lines.append("-- Insert games")
    gv = []
    for name, prod, pop in games:
        gv.append("('{}','{}',{})".format(escape_sql(name), escape_sql(prod), pop))
    lines.append("INSERT INTO gry (nazwa, producent, popularnosc) VALUES")
    lines.append(",\n".join(gv) + ";")

    lines.append("-- Insert skins")
    batch_size = 200
    for start in range(0, len(skins), batch_size):
        batch = skins[start:start+batch_size]
        vals = []
        for s in batch:
            vals.append("('{}',{},{},'{:.2f}','{}')".format(
                escape_sql(s['nazwa']),
                s['id_gry'],
                escape_sql(s['rzadkosc']),
                float(s['cena']),
                escape_sql(s['opis'])
            ))
        lines.append("INSERT INTO skiny (nazwa, id_gry, rzadkosc, cena, opis) VALUES")
        lines.append(",\n".join(vals) + ";")

    lines.append("-- Insert users")
    uv = []
    for u in users:
        uv.append("('{}','{}')".format(escape_sql(u['login']), escape_sql(u['email'])))
    lines.append("INSERT INTO uzytkownicy (login, email) VALUES")
    lines.append(",\n".join(uv) + ";")

    lines.append("-- Insert ownerships")
    ov = ["({},{})".format(uid, sid) for uid, sid in ownerships]
    for start in range(0, len(ov), batch_size):
        batch = ov[start:start+batch_size]
        lines.append("INSERT INTO posiadane_skiny (id_uzytkownika, id_skinu) VALUES")
        lines.append(",\n".join(batch) + ";")

    return "\n\n".join(lines), skins, users, ownerships

def main():
    sql_text, skins, users, ownerships = make_sql()
    with open(OUTPUT_SQL, "w", encoding="utf-8") as f:
        f.write(sql_text)
    print("SQL zapisany do:", OUTPUT_SQL)
    print("\nPrzykładowe 10 skinów:")
    for i, s in enumerate(skins[:25], start=1):
        print(f"{i}. {s['nazwa']} | gra_id={s['id_gry']} | {s['rzadkosc']} | {s['cena']}")

if __name__ == "__main__":
    main()
