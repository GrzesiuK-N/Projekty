kwota = input("jaką kwotę chce wypłacić")
kwota = float(kwota)
konto = 4000
while kwota > 4000:
    print("Sprawdź czy jest tyle")
    kwota = kwota - 1
    kwota = konto - 10
if konto <= 2000:
    print("podatek został opłacony")
    