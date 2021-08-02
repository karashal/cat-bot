# pet-bot

#### Class Pet has 6 parameters.
#### Required parameters: name, age, energy.
#### Optional parameters: minimum energy (default - 1), maximum energy (default - 100), errors (default - 0).
#### Energy must be no less than 1 and no more than 100 (this can be changed).

### Methods:

```about()``` - about.  
```condition()``` - pet's condition.  
```showEnergy()``` - check energy.

#### These methods consume energy.
```makeSound()``` - make natural sound. **-10** energy.  
```jump()``` - jump. - **20** energy.

#### These methods replenish energy.
```eat()``` - eat. **+30** energy.  
```sleep()``` - sleep. **+50** energy.