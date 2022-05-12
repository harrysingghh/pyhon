import scrapy
from ..items import TelebotItem

class tele(scrapy.Spider):
    name= 'exam'
    start_urls = ['https://www.picuki.com/profile/']
    def parse(self, response):
        item = TelebotItem()
