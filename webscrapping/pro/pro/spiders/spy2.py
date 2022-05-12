import scrapy
from pro.items import
#
class firstspider(scrapy.Spider):
    name= "Books2"
    start_urls = ["https://www.amazon.com/-/es/"]
    def parse(self, response):
        item = ProItem()
        item['title'] = response.css('h2')[0].get()
        print("check kr lreeee  :    ",item)
        item['content'] = response.css('p')[0].get()
        print(item)
        return item
