Before inserting test data I had to make these changes to the query:
password on my laptop for phpmyadmin is 'safepassword'
apostrophe changed to single quote for:
'AMD Ryzen 9 3900X’
added single quote to end of:
'OpenBSD Tshirt

To create the first function I simply selected the name and prices of each row in the items table and used ORDER BY price ASC to sort the data from cheapest to most expensive.

To get the discounted price I used price * (1-discount). And then I used essentially the same query as the first function to output the data as I wanted to.

To receive the average of only the discounted items, I used the condition WHERE items.id = discounts.item_id to only receive the rows where an item had a discount. 

The css I used in the quiz was taken from my previous lab's styling; i just changed the id's of the elements.

Time did not permit me to include advanced css or javascript but I am proud of the fact that I was able to get the functions working

The queries I used took heavy inspiration from lab 7 in which we made the gradebook
