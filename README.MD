# ABCruise workshop web-pages

This repository contains the sources of the ABCruise website held in 16th to 18th May 2016 in Silja Line cruise between Helsinki and Stockholm. 
The workshop was the fifth in 'ABC-in-' series of international workshops on approximate Bayesian computation (ABC) and related methods.
The programme of the workshop is found in the file ABCruise_booklet.pdf.

The url used to be www.hiit.fi/abcruise but it does no longer exist.
I republished the pages at [abcruise.kevea.fi](http://abcruise.kevea.fi) for a historical record.
The pages were made with Pure.css and custom PHP and included a registration system.


## Deployment with Docker

An example using the php:5.6-apache image (without the registration system functionality):

```
docker run --rm -p 8000:80 --name abcruise -v "$PWD":/var/www/html php:5.6-apache
```
