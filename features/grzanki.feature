Feature: Web pages

  Scenario: Grzanki
    Given I am on homepage
    When I follow "Grzanki"
    Then I should see "kromki chleba położysz na patelni"
