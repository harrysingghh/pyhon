import scrapy
from ..items import TelebotItem

class tele(scrapy.Spider):
    name= 'telebot'
    start_urls = ['https://www.picuki.com/profile/']
    def parse(self, response):
        item = TelebotItem()
        temp = response.css('div.photo img::attr(src)').getall()[0:2]
        item["image_urls"] = self.url_join(temp, response)
        return item
    def url_join(self, urls, response):
        joined_urls = []
        for url in urls:
            joined_urls.append(response.urljoin(url))
        return joined_urls
