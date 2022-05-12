# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html


# useful for handling different item types with a single interface
from itemadapter import ItemAdapter
import mysql.connector

class QuotetutorialPipeline:

    def __init__ (self):
        self.conn = mysql.connector.connect(
                        host= 'localhost',
                        user= 'root',
                        passwd = 'Root@12345',
                        database = 'scrapy',
                        )
        self.curr = self.conn.cursor()
        #self.curr.execute(""" DROP TABLE IF EXISTS Table_test""")
        #self.curr.execute(""" CREATE TABLE Table_test(title text,content text)""")

    def store_db(self, item):
        sql = "INSERT INTO Table_test (title, content) VALUES (%s, %s)"
        print("ye valuse h bhai ", item.get('title'))
        print("Nhi to ye valuse h bhai ", item['title'])
        self.curr.execute(sql,(
                            item['title'], #['title'],
                            item['content'],
                            ))
        self.conn.commit()


    def process_item(self, item, spider):
        self.store_db(item)
        print("pipeline : ",item['title'])
        return item
