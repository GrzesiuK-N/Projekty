file = open('tekst.txt', 'r', encoding='utf-8')
lines = file.readlines()

for line in lines:
        line = line.strip('*').split()
        podstawa = int(line[0])
        wykladnik = int(line[1])
        wynik = podstawa**wykladnik + podstawa * wykladnik
        print(wynik)
      
