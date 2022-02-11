# PHP UK 2020
Code for my TDD workshop at the PHP UK Conference 2022

## Workshop 1: Stack - Abstract Data Type
Together we will implement a [Stack](src/ADT/Stack.php) (Last In, Last Out) to the 
[Collection Interface](src/ADT/Collection.php).

## Lab 1: Queue - Abstract Data Type
Individually or in pairs implement a [Queue](src/ADT/Queue.php) (First In, First Out) to the 
[Collection Interface](src/ADT/Collection.php)

## Lab 2: Bowling Game Score Calculator
Individually or in pairs implement a score function in the [Bowling Game Class](src/Bowling/Game.php). The function 
`score()` will take a string representation of a single game of Bowling

e.g.
```text
44 34 9/ X 13 -1 8- 53 -9 X4/
```

The function will return the score for the game.

### Rules of Bowling
The game consists of 10 frames. In each frame the player has two rolls to knock down 10 pins. The score for the frame is
the total number of pins knocked down, plus bonuses for strikes and spares.

A spare is when the player knocks down all 10 pins in two rolls. The bonus for that frame is the number of pins knocked
down by the next roll.

A strike is when the player knocks down all 10 pins on his first roll. The frame is then completed with a single roll.
The bonus for that frame is the value of the next two rolls.

In the tenth frame a player who rolls a spare or strike is allowed to roll the extra balls to complete the frame. 
However no more than three balls can be rolled in tenth frame.

This [Bowling Game Calculator](https://www.bowlinggenius.com/) may be useful to experiment with how the scoring works

## Lab 3: Event Card Sender (Test Double)

During this Lab session I want you to implement the [CardManager](src/Celebration/CardManager.php) function
sendCelebration(Person $person). When the function when fully implemented it should:
  - take a [Person](src/Celebration/Person.php) object.
  - Use the person object to retrieve an [Event](src/Celebration/Event.php) from the [EventRetriever](src/Celebration/EventRetriever.php)
  - Using details from the [Person](src/Celebration/Person.php) send a card using the [Sender](src/Celebration/Sender.php)
  - the template that is used should be decided on by decided using event
    - Type: Birthday
      - Years: 1 - TEMPLATE_BABY
      - Years: 2 to 4: TEMPLATE_TODDLER
      - Years: 5 to 12: TEMPLATE_CHILD
      - Years: 13 to 17: TEMPLATE_TEENAGER
      - Years: 18+: TEMPLATE_ADULT
    - Type Anniversary
      - Years: 1 - TEMPLATE_PAPER
      - Years: 25 - TEMPLATE_SILVER
      - Years: 40 TEMPLATE_RUBY
      - Years: 50 - TEMPLATE_GOLD
      - Years: 60 - TEMPLATE_DIAMOND
      - Years: Any Other - TEMPLATE_ANNIVERSARY
    - If the [EventRetriever](src/Celebration/EventRetriever.php) throws a [NoEventFoundException](src/Celebration/NoEventFoundException.php) then nothing should be sent


# Workshop 2: Mutation Testing 
Together we will explore how Mutation Testing can give us confidence in our tests covering all eventualities of our code
