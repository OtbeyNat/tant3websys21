The first optimization that I did was separating the css and javascript from the html file. Doing so makes the files easier to read and also promotes the principle of separation of concerns. Minimizing the markup of the css and javascript is a second optimization I implemented. A lot of different selectors had the same exact rules as one another (text-align center was the rule that was repeated the most by itself). Instead of taking extranneous lines and characters of code, I minimized the css so that the selectors can perform the repeating rules in 2-4 lines. A selector in the stylesheet, topbutton, was not implemented in the html so I removed it. Several adjacent classes had the exact same ruleset so for a third optimization I combined elements that were children of a specific class. The points and rank classes were children of the score class, the yesterday and today answer classes were children of the wordlists class, and the two restart classes were children of the general restart class. Within the style sheet I used more efficient selectors (the child ">" selector) as a fourth optimization. Along with minimizing javascript markup, for my fifth optimization, I replaced a lot of the script that focused on styling html elements with css. The main changes were to the styles of the individual combs. When the combs are clicked on their sizes and positions changed. Rather than having tons of lines in javascript editing their styles, I put new css selectors in to replace the redundant code. The functions type and untype no longer have walls of text within them. For the untype function, I added the comb number as a parameter so that I can specify which style is needed. To further minimize markup in the javascript, i changes several blocks of code into for loops because each line performed the same operation just on a different element for the comb. There were also 6 instances of the same block of code in which elements in html were having the display properties reset. Instead of having 6 duplicates, I moved them all into one function and called the function in its place. I'm not sure if this would be considered another (sixth) optimization, but I am essentially changing some of the logic of the javascript, albeit not so much. If this can be considered as an optimization, then my final two (seventh and eighth) are deal with minimizing the number of pictures + HTTP requests and DNS lookups. Instead of having two sets of 26 pictures for each letter in the alphabet, I optimized the app so that you would only have to call for one image, a spritesheet that has all such pictures in one png file. From there I made new css classes to represent these individual sprites and put them in place of the old pictures. This method reduced the number of pictures necessary and improved the performance of the app by having less DNS lookups and requests.
The main improvement I made to the game that did not affect the logic was that I added a bee image next to the points total. The size of this bee will change depending on the rank that the user achieves. The better the rank, the larger the bee becomes. I also wanted to change the color scheme of the app to make it feel a little bit more like a honey comb. So rather than the black and white themes, I kept it to an orange theme. With some imagination, it feels like you're playing the game in a jar of honey.

https://codeshack.io/images-sprite-sheet-generator/ 