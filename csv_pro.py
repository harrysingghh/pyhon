import csv

with open('customer-order.csv', 'r') as file:
    reader = csv.reader(file)
    for row in reader:
        print(row)
