Feature: Converting numerals
  In order to understand the line numbers on the documentation
  As a person trying to read some old documentation
  I want to convert the Roman Numerals to Arabic Numerals


  Scenario: Converting a simple number
    Given my Roman Numeral is 'I'
    When I convert it
    Then I should get '1'

  @wip @critical
  Scenario: Converting a simple number
    Given my Roman Numeral is 'MCMXCVII'
    When I convert it
    Then I should get '1997'
