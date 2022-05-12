
try:
    import mysql.connector
    connection = mysql.connector.connect(host='localhost',
                                         database='stacksclasses',
                                         user='stacksclasses',
                                         password='asdqwe@123')
    print("here")
    sql_select_Query = "SELECT * FROM `users` WHERE `last_renew_date` LIKE '%2021-07-05%'"
    cursor = connection.cursor()
    cursor.execute(sql_select_Query)
    # get all records
    records = cursor.fetchall()
    print("Total number of rows in table: ", cursor.rowcount)

    print("\nPrinting each row")
    for row in records:
        print("Id = ", row[0], )
        print("Name = ", row[1])
        print("Price  = ", row[2])
        print("Purchase date  = ", row[3], "\n")

except mysql.connector.Error as e:
    print("Error reading data from MySQL table", e)
except Exception as i:
    print("Error reading data from MySQL table", e)
finally:
    print("true color")
    if connection.is_connected():
        connection.close()
        cursor.close()
        print("MySQL connection is closed")
# try:
#     from jinja2 import Environment, FileSystemLoader
#     from weasyprint import HTML
#     env = Environment(loader=FileSystemLoader('.'))
#     template = env.get_template("try.html")
#     template_vars = {"title" : "Sales Funnel Report - National","national": "National"}
#     html_out = template.render(template_vars)
#     HTML(string=html_out).write_pdf("report.pdf")
# except Exception as e:
#     raise
