# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy
import mysql.connector

class ProItem(scrapy.Item):
    def conn_connection(self):
        self.conn = sqlite3.connect("database.db")
        self.curr = self.conn.cursor()
    def create_connection(self):
        self.conn= mysql.connector.connect(
        host = 'localhost',
        user = 'root',
        passwd = 'root',
        database = 'scrapy',
        )
        self.cur = self.conn.cursor()

    def __init__(self):
        self.connection = sqlite3.connect('scrapedata.db')
        self.cursor = self.connection.cursor()
        self.cursor.execute('CREATE TABLE IF NOT EXISTS myscrapedata ' \
                    '(id INTEGER PRIMARY KEY, url VARCHAR(80), desc VARCHAR(80))')

    title = scrapy.Field()
    content = scrapy.Field()
    pass
