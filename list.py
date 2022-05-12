# lis = [1,10]
# err = []
# for i in range(1,lis[-1]):
#     if lis[i-1] != lis[i]-1 :
#         err.append(lis[i-1]+1)
# print(err)
#
#
#
#
# aggregrate annotation generics logic_first

lis = [1,2,4]
tup = (1,2,lis,3)
print(tup)
lis.insert(2,3)
print(tup)
