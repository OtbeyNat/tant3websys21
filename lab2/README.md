# tant3websys21
Lab 2

For Lab 2 I made the content of the Amendments and the sections of the Articles in the Constitution accessible - the entire text of it and summaries of them. I included every Amendment and their respective content and made sure that the dropdown format was consistent throughout the page.
A challenge we had was to figure out how to display the analysis of the Constitution and Amendments in an interactive way. One of the solutions was to have summaries and detail tags to not only decrease the amount of content shown at once, but to also provide more user interaction to the site.
Our group decided that we wanted to be able to view a popup of the summary of the Amendment and/or Article by hovering over the title. I added these popup summaries to each Article of the Constitution and each of the sections with in the Article. 
Another issue I had was that the summary that popped up was not at the front of the page relative to the other elements around it. For example, when we hover over "First Amendment", the "Second Amendment" text was still visible - which was not the intended result. After lots of searching and experimenting, I remembered there was a simple CSS property to fix this issue: z-index. By setting the z-index of our summary to 100, it will always appear over every other element on the page. Whenever you hover over a title that has extra analysis, I added a property so that the title/block has a yellow border around it. The border and summary that shows underneath line up without interefering with one another. For the home page, I added a picture of the beginning of the Constitution; it needed extra content and graphics to fill up the empty space. Additionally I added a short blurb to explain what Constitution Day is.

For extra credit, our site is available on github pages:
Github Pages Link to Site: https://fantasticfour-websystems.github.io/Lab-2.github.io/

Resources/References:
https://developer.mozilla.org/en-US/docs/Web/CSS/z-index
https://stackoverflow.com/questions/34975218/css-background-for-text-only-not-parent-span-div-body
https://www.w3schools.com/howto/howto_css_display_element_hover.asp
https://today.law.harvard.edu/wp-content/uploads/2018/07/CONSTITUTION_iStock-923052552_2500-1800x1143.jpg
