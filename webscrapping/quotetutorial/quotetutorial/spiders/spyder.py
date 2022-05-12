import scrapy
from ..items import QuotetutorialItem

class QuoteSpider(scrapy.Spider):
    name = 'posts'
    start_urls = ['https://wordpress.com/dailypost/']
    def parse(self, response):
        item = QuotetutorialItem()
        post = response.css('div.dp-feature')
        print(len(post))
        for a in post:
            head = a.css('h2::text').get()
            content = a.css('p::text').get()
            item['title'] =head
            item['content'] =content
            yield item

# import scrapy
#
# class QuoteSpider(scrapy.Spider):
#     name = 'posts'
#     start_urls = ['http://artsenz.pythonanywhere.com/']
#     def parse(self, response):
#         post_section = response.css('div.round_div')
#         print("length = ", len(post_section))
#         print(post_section)
#         for a in post_section:
#             head = a.css('h3::text').get()
#             content = a.css('h4::text').get()
#             yield{
#             'title' : head,
#             'content' : content,
#             }
