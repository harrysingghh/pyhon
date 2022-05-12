import sqlite3

conn = sqlite3.connect("database.db")
curr = conn.cursor()
curr.execute(""" DROP TABLE IF EXISTS database.db""")
curr.execute(""" CREATE TABLE Table_test(title text,content text)""")
curr.execute(""" INSERT INTO Table_test values('Y title Banchoooo', 'text') """)
conn.commit()
conn.close()
