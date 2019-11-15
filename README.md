<h1 align="center">
  <br>
  <a href="https://github.com/s0md3v/Predator"><img src="https://i.ibb.co/ZYSkfgy/logo.png" alt="Predator"></a>
  <br>
  Predator
  <br>
</h1>

<h4 align="center">Anti-Automation System</h4>

<p align="center">
  <a href="https://github.com/s0md3v/Predator/releases">
    <img src="https://img.shields.io/github/release/s0md3v/Predator.svg">
  </a>
  <a href="https://github.com/s0md3v/Predator/issues?q=is%3Aissue+is%3Aclosed">
      <img src="https://img.shields.io/github/issues-closed-raw/s0md3v/Predator.svg">
  </a>
</p>

### Introduction
Predator is a prototype web application designed to demonstrate anti-crawling, anti-automation & bot detection techniques.
It can be used a honeypot, anti-crawling system or a false positive test bed for vulnerability scanners.

> **Warning:** I strongly discourage the use of the demonstrated methods in a production server without knowing what they exactly do.

### Techniques Used

#### Bot Detection
##### Header Inspection
Headers are often in different order when compared to a real browser or lack altogether.
##### Webdriver Detection
Most of the HTML mutation techniques described here can be bypassed with browser based frameworks such as `selenium` and `puppeteer` but they can be detected with various tests as implemented in [isBot.js](https://github.com/s0md3v/Predator/blob/initial/js/isBot.js).
##### Resource Usage
Most of the bots only make requests to webpages and images but resources files such as `.css` are often ignored as they aren't downloaded by the HTTP implementation in use. Bots can be detected when the ratio of webpages/images and such resource files becomes higher than a predefined threshold.

#### Malformed HTML
A lot of HTML parsers used in crawlers can't handle broken HTML as browsers do. For example, clicking the following link in a browser leads to `page_1` but affected parsers parse the latter value i.e. `page_2`

`<a/href="page_1"/href="page_2">Click</a>`

It can be used to keep off and ban crawlers without affecting user experience.

#### Invisible Links
Some links are hidden from users using CSS but automated progarms can still see them. These links can be used to detect bots and
take a desired action such as banning the IP address.

#### Bait Links
When Predator suspects that the visitor is a bot, it generates random number of random links which direct to a page
containing more random links and this process keeps repeating.

#### Signature Reversing
Vulnerability scanners usually enter a payload and see if the webapp responds in a certain way. Predator can pretend
to have a vulnerability by including exptected response i.e. signature within HTML.\
Predator mimics the followiwng vulnerabilities at the moment:

- SQL Injection
- Cross Site Scripting (XSS)
- Local File Inclusion (LFI)

This method makes it possible to set up a honeypot without actually hosting any vulnerable code and serves as a test bed for false positive testing.

