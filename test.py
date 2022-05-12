aa = [45,89,65,32,11,25]
max=0
Smax=0
for a in aa:
    if max < a:max=a
for a in aa:
    if a<max and Smax<a:Smax = a
print(Smax)
