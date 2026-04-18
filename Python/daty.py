
dzien = int(input("podaj dzień:"))
miesiac = int(input("podaj miesiąc:"))
rok = int(input('podaj rok:'))

przystępny = (rok%4==0) and ((rok%100!=0) or (rok%400==0))



if miesiac==2:
    if 0> dzien >(28 + przystępny):
        raise ValueError("nie prawidłowy dzień lutego")
elif miesiac in (4,5,9,11):
    if 0> dzien > 30:
        raise ValueError("dzień w kwietniu, czerwc, wrześniu lub listopadzie nie może być wiekszy niż 30 ani mniejszy od 1")
elif miesiac in (1,3,6,7,8,10,12):
    if 0> dzien > 31: 
        raise ValueError("dzień marcu, lipcu, sierpniu, październiku lub grudniu nie może być wiekszy niż 31 ani mniejszy od 1")
else:
    raise ValueError("nie prawidłowy miesiąc")

print("prawidłowa data")