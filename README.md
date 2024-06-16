
# Implicit Association Test

This IAT allows to measure implicit bias towards or against human augmentation. There are three types of human augmentation that are measured here: Augmented Action, Cognition and Senses.

## Principle

The user gets either shown a good/bad word or an augmented/non-augmented human. The user uses the key 'E' and 'I' to sort the items into the respective right category. The faster a user takes to sort an item the stronger the association is. Penalty time is added onto the time of wrongly sorted items.

## Functionality

Every participant conducts all three IAT types in a different order. To ensure a fair distribution of each of the six pathways, counters are being used after the user accesses the main page in order to redirect the user to the first IAT. After the first IAT, a second counter is used to determine the second IAT. After the second IAT, the user is being redirected to the remaining IAT followed by a demographics and explicit attitudes survey. All relevant data is written into a created CSV with the help of a PHP file.

## Calculation

The degree of bias is determined by the so-called D score. The (improved) formula for the calculation of the D score may be found in Anthony G. Greenwald's research paper [1]. D scores between -0.15 and 0.15 are being displayed as (almost) no bias, between 0.15/-0.15 and 0.35/-0.35 as slight bias, between 0.35/-0.35 and 0.65/-0.65 as moderate bias and above 0.65 or -0.65 as strong bias.

[1] Anthony G Greenwald, Brian A Nosek, and Mahzarin R Banaji. Understanding and using
the implicit association test: I. an improved scoring algorithm. Journal of personality and social psychology, 85(2):197, 2003.
