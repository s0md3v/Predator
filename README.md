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
Predator is small web application designed to demonstrate anti-crawling, anti-automation & bot detection techniques.
It can be used a honeypot, anti-crawling system or a false positive test bed for vulnerability scanners.

> **Warning:** I strongly discourage the use of the demonstrated methods in a production server without knowing what they exactly do.

### Techniques Used

#### Malformed Seperators
Crawlers that extract hyperlinks with regular expressions usually do not consider `/` a valid seperator between attributes but
it works as intended in browsers.\
It can be used to keep off crawlers without affecting user experience.

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

