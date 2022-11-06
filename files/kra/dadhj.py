def liczba_pierwsza (s):
    if s==2:
        return True
    for i in range(2,s):
        if s%i==0:
            return False
        return True

def dzielnik (n):
    for i in range(2,n+1):
        z=liczba_pierwsza(i)
        if n%i==0 and z==True:
            print(i)

n = int(input("podaj liczbę naturalną: "))
print(dzielnik(n))

