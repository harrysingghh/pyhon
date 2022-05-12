import scrapy
from pro.items import ProItem
#
class firstspider(scrapy.Spider):
    name= "Books"
    start_urls = ["http://artsenz.pythonanywhere.com"]
    def parse(self, response):
        filename = "test.html"
        with open (filename,"wb") as f:
            f.write(response.body)
