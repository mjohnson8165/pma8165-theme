## A dark minimal theme for phpMyAdmin 4.3.x.x

_**Update**: 2015-03-21 now compatible with latest pma stable release: 4.3.8.1_

---
This theme was born simply out of my deepest needs - more precisely the need to not have to stare at the ugly default phpMyAdmin theme all day long (sorry, *guy* who made it). But seriously now, it had to come to this - in a multiple screen setup where Gnome looks awesome, terminal windows look awesome and Sublime Text tops everything, phpMyAdmin just didn't belong.

I guess one could say PMA8165 was somewhat inspired from the [Numix GTK3 theme](http://satya164.deviantart.com/art/Numix-GTK3-theme-360223962) which, in combination with a few more things, can make Gnome look lethal as detailed in one of my fascinating blog posts on [How To: Make Linux Look Sexy In Only 3 Fast Steps](http://howto8165.wordpress.com/2014/08/15/linux-minimalist-desktop/).

## Installation

* Go to your themes directory:
`cd /usr/share/phpmyadmin/themes`

* Clone the repository: `sudo git clone https://git@github.com/mjohnson8165/pma8165-theme.git pma8165`

* Go to your phpMyAdmin page and select the *pma8165* theme

## Screenshots

And here are a couple of screenshots of what you'll be getting:

![alt text](https://github.com/mjohnson8165/pma8165-theme/blob/master/screenshot-1.png "PMA8165 Theme - Screenshot #1")

![alt text](https://github.com/mjohnson8165/pma8165-theme/blob/master/screenshot-2.png "PMA8165 Theme - Screenshot #2")

## Disclaimer

I made this theme for myself and I'm afraid that even at this point, it already satisfies my needs. Therefore, it may contain visual glitches here and there and without any help, I will only fix those when I come across them *and even then* I might not be so easily willing to, I do have a life you know... 

I've originally designed the theme for v4.0.10deb1, then moved on to v4.2.8.1 which eventually got merged back into the master branch. While I also kept the 4.0.X.X branch, the new version has many improvements over it and is *almost* backwards-compatible with older versions. 

But then again, only time will tell whether I'll work on the other branch anytime too soon, or rather just upgrade phpMyAdmin on all my other machines that are using it.

## Caution

The *img* directory is a mess - most icons in there are not even used and the sprites file was tampered manually, so attempting to run the *generate-sprites* script is entirely unadvisable at the moment, unless you really know what you're doing - I know what I'm doing, I just don't wanna do it *yet*...
