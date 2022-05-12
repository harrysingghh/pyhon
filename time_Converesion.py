twe = input("")
if twe[8]=="A":
    if twe[:2] =="12":
        twe[:2]="00"
    else:
        twe[:2] = str(int(twe[:2])+12)
print(twe)