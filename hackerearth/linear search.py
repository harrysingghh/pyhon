val = input().split(" ")
valu = input().split(" ")
size = int(val[0])+1
#for i in reversed(range(0,int(val[0])) ):
i=int(val[0])-1
while i>=0:
    if val[1]==valu[i]: 
        print(i+1)
        exit()
    i-=1
    print(valu[i])
else:
    print(-1)