# Ghent Yu's phenomenal tips for readable code

## General

- Naming variables: go for clarity and be consistent how you name things.
- Avoid abbreviations.
- Write for clarity, not (just) for the shortest way to write anything.
- Don't leave commented code (unless it's clear what it's for).
- Be consistent with spaces and blank lines.
- Remove unused code.
- Use comments to clarify, but as a last resort. First objective is to have the code explain itself.

## PHP specific

- Split code in small functions.
- One function = one purpose.
- Return early.
- Omit else if possible.
- Break can often replace nested ifs in loops.
- Follow a standard: existing one > framework one > default one (like PSR2 / 12).
  - '' for regular strings
  - "" for strings with variables in them
  - \$variableCamelCased, ClassName and functionName() style naming
