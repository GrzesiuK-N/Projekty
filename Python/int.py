konto = 4000
kwota = input("jaką kwotę chcesz wypłacić")
kwota = float(kwota)
while kwota <= konto:
    konto = konto + kwota
    print("na kocie zostało", konto)
else:
    print("błąd! nie masz tyle pieniędzy na koncie")