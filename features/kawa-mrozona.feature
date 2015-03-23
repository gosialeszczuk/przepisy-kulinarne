Feature: Web pages

  Scenario: Kawa mrozona
    Given I am on homepage
    When I follow "Kawa mrożona"
    Then I should see "2 łyżeczki kawy rozpuszczalnej"
