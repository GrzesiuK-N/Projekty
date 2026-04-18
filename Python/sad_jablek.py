jablka = input("ile jest jablek na drzewie")
jablka = float(jablka)
kosz = 0
while jablka > 0: 
    print("zrywam jabłka")
    jablka = jablka - 1
    kosz = kosz + 1
    print("mam w koszu tyle jablek:", kosz)
