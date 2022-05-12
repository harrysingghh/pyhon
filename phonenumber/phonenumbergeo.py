# import phonenumbers
# from phonenumbers import geocoder
# #
# number = phonenumbers.parse("+918510903846") #Won't show my number,try with any number :)
# # location = geocoder.description_for_number(number, "de")
# # print("\n\nLocation of the number : ",location,"\n\n")
#
# import phonenumbers
#
# local = phonenumbers.format_number(number, phonenumbers.PhoneNumberFormat.NATIONAL)
# internation = phonenumbers.format_number(number, phonenumbers.PhoneNumberFormat.INTERNATIONAL)
# E164 = phonenumbers.format_number(number, phonenumbers.PhoneNumberFormat.E164)
# print("Formation of local number : ",local)
# print("Formation of Internation number : ",internation)
# print("Formation of E.164 number : ",E164)

import phonenumbers
from phonenumbers import carrier
number = "+918510903846" #Won't show my number,try with any number :)

formatter = phonenumbers.AsYouTypeFormatter("IN")
print(formatter.input_digit(input()))
print(formatter.input_digit(input()))

print(formatter.input_digit(input()))
print(formatter.input_digit(input()))
print(formatter.input_digit(input()))
print(formatter.input_digit(input()))
print(formatter.input_digit(input()))
