i = float(input("podaj natężenie prądu[A]"))
u = float(input("podaj natężenie prądu[V]"))

# or - lub - przynajmniej jeden z 
if i < 0 or u < 0:
    print("nieprawidłowe dane")
else:
    print("moc urządzenia wynosi:", i*u, "W")

#and - oraz wszystkie warunki muszą być spełnione

if i == 0 and u == 0:
    print("nie masz prądu")

if (i > 1000 or u > 2000) and ( i < 6000):
    print("stacja wysokiego napięcia")
if (i >= 6000):
    print("kaboom!")