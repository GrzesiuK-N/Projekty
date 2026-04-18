# %%
# ćw 1
dict = lambda **k:k
replacer = lambda n,**rep:[(n:=n.replace(i[0],i[1])) for i in rep.items()][-1]
działaj = (lambda liczba,napisz,*,koumunikat=0,col=0,p0=0,nl=0,objętość=0,sześcianu=0,o=0,boku=0,p1=0,wynosi=0,p2=0:(print(replacer((" ".join(działaj.__code__.co_varnames[działaj.__code__.co_argcount:])), **dict(col=':',nl='\n',p0='%s',p1='%s',p2='%s'))%(napisz,liczba,liczba*liczba*liczba))))
działaj(4,"413 - i'm not a numberr")
0--------------------------------------------------------------0
# %%
#zad 1
delta = lambda a,b,c:q if (q:=b*b - 4*(a*c))>=0 else -1
0--------------------------------------------------------------0
# %%
# zad 2
pola = {'kwadrat':lambda a,b: a*a,'prostokat':lambda a,b: a*b,'trojkat':lambda a,b: (a*b)/2}
pole = lambda a,b,typ: pola[typ](a,b) if typ in pola else -1
print(pole(4,0,'42'))
0--------------------------------------------------------------0
# %%
