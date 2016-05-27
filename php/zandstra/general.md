## Inheritance ##


What if


	class C extends B { }



	class B extends A { }


How can I call from `C` constructor or method defined in `A` ?


------------------------------


## Late static binding ##

Self -- refers to the context of resolution,

Use static, which refers to the invoked, rather then containing class.

## Exceptions ##


	throw new Exception('Some text');


	try { // do something } catch (Exception $e) { // handle exception
		}


Remember to place more generic Exception after more specialized.



## Descructors ##


When to use?


## Callbacks, Anonymous funcitons, Closures ##


	is_callable($function); create_funciton('fun_name', 'fun_body');
	// Old way. Since PHP 5.3 we can use callback syntax


Closures! -- just anonymous function inside anonymous function. Can
use variables of higher anonymous function with this syntax:

	function ($var1, $var2) use ($var42) {

	}



# OOP Design #


*Cohesion*


*Coupling*


*Orthogonality*

## How to choose class ##

Try to describe with words. Try use not more than 25 words. Try not to
use words like 'and' and 'or'.


## 4 of bad design ##

* Code duplication

* Class knows too much

* Jack of all trades -- too many traits in a class. Some of them can
  and should be subclassed. It's hard to extend a class with too many
  traits, because you have to decide wich part of the functionality
  you are extending.

* Conditions -- many conditional statements in code could be a cry for
polimorphism



# UML #


## association ##

(just line, arrows may be on both ends; also we can use numbers and
`*` to illustrate quantity)


## aggregation vs composition ##

(aggregation shown by empty diamond)

Both are simular concept, but composition is stronger.

(composition show by filled diamond)

In composition contained object can be referenced only through parent
class.

## use relationship ##

(shown by a broken line and open arrow )




# Patterns #


## Pattern overview ##

* Name
* Problem
* Solution


## Gang of Four format ##


# Some pattern principles #


## Composition and inheritance ##

## Code to an interface ##


## Concept that varies ##





# Generating objects #


## Singleton ##

## Factory method pattern ##

Factory -- class or method which generates objects.

## Abstract factory pattern ##




# Patterns for flexible object programming  #

## Composite Pattern ##

One abstract class with methods for two kinds of subclasses (Armies
and Units).

Relies on simularity on containing objects.

Hard to make from relationship database (easy from XML).


## Decorator pattern ##

For flexible objects decoration (tiles with pollution and diamonds).
It's an alternative of many child classes.





* 
* 
* 
*



What are you doing here


1. slkdfj
2. dkfjlskfj
