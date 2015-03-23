Feature: Web pages

  Scenario: "Bedzie Pogoda"
    Given I am on homepage
    When I follow "Będzie pogoda"
    Then I should see "Będzie pogoda, jak się nie poleje z nieba woda."