#!/usr/bin/env python

from time import time
import requests
import requests_cache
requests_cache.install_cache('data/update.cache')
from bs4 import BeautifulSoup


def soup(url):
    data = requests.get(url).text
    return BeautifulSoup(data)


def getItems(search):
    url = "https://www.etsy.com/uk/shop/TurtlesTrinkets/search?search_query=" + search + "&ts=" + str(time)
    return soup(url).find_all(attrs={"class": "listing-card"})


def itemsToHTML(items):
    hs = []
    for item in items:
        #if "data-palette-listing-id" not in item:
        #    print item
        #itemId = item["data-palette-listing-id"]
        itemId = item["id"]

        itemLink = item.find(attrs={"class": "title"})
        title = itemLink["title"]
        print title
        link = itemLink["href"].partition("?")[0]

        details = soup(link)
        desc = details.find(id="description-text").contents[0].strip()
        img = details.find(id="zoom")["href"]
        imgData = requests.get(img).content
        imgFile = "img/etsy/%s.jpg" % itemId
        file(imgFile, "w").write(imgData)

        desc = title
        title = ""
        hs.append("""item("%s", "%s", "%s", "%s");""" % (title, link, "etsy/%s" % itemId, desc))
    return "\n".join(["<?"] + hs + ["?>"])


print "*** earrings ***"
file("data/earrings.php", "w").write(itemsToHTML(getItems("earrings")))

print "*** bracelets ***"
file("data/bracelets.php", "w").write(itemsToHTML(getItems("bracelets")))

