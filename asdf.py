# a = "asdfasdfasdf"
# b= set(a)
# res = {}
# for _ in range(len(b)):
#     temp =b.pop()
#     res[temp] = a.count(temp)
# print(res)
from math import cos, degrees
a, b = int(input()), int(input())
c = ((a**2 + b**2)**0.5)//2
print(degrees(cos(c//b)))
print(cos(c//b))





# def fact(n):
#     res = 1
#     while n>=1:
#         res *=n
#         n-=1
#     return res
# print(fact(4))
# fruit 3
# bar 5
# fruit bar 3*5
# def fruit(n):
#     if n%3==0 and n%5==0 :
#         return "FruitBar"
#     elif n%3==0 :
#         return "Fruit"
#     elif n%5==0 :
#         return "Bar"
#     else :
#         return "it is not divisible"
# print(fruit(6))
# print(fruit(10))
# print(fruit(15))
# print(fruit(4))
# "abbcccdddd"
# a=1
# count fun
# empty
# def teststr(n):
#     lis = []
#     for i in range(len(n)):
#         if n[i] not in lis:
#             lis.append(n[i])
#             print(n[i]," = ",n.count(n[i]))
# teststr("abbcccdddd")
