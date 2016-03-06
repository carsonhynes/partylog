"""
Written by Carson Hynes

Usage: python csv2list.py

Make sure you have the names separated by newlines and saved into names.csv.
You should be able to do this by putting them all into an Excel sheet in one column,
deleting the values in ALL other columns/rows, and saving to CSV via the standard save menu.

example names.csv seen below

Carson Hynes
James Adler
etc...

This file will populate list.js with properly formatted data.
"""

infile = open("names.csv", 'r')

outputArray = "var names = [\n"

for line in infile:
    line = '\t\"' + line.rstrip() + '\",\n'
    outputArray += line

outputArray = outputArray[: -2]

outputArray += '\n];'

outFile = open('list.js', 'w')

outFile.write(outputArray)

outFile.close()
