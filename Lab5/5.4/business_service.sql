CREATE TABLE Categories(
    CategoryID varchar(255) NOT NULL PRIMARY KEY,
    Title varchar(255),
    Description varchar(255)
)

CREATE TABLE Businesses(
    BusinessID varchar(255) NOT NULL PRIMARY KEY,
    Name varchar(255),
    Address varchar(255),
    City varchar(255),
    Telephone varchar(255),
    URL varchar(255)
)

CREATE TABLE Biz_Categories(
    BusinessID varchar(255) NOT NULL,
    CategoryID varchar(255) NOT NULL,
    PRIMARY KEY(BusinessID, CategoryID),
    FOREIGN KEY(BusinessID) REFERENCES Businesses(BusinessID),
    FOREIGN KEY(CategoryID) REFERENCES Categories(CategoryID)
)