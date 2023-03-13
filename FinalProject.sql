--Create Users Table
CREATE TABLE Users (
    UserId INT PRIMARY KEY,
    Fname VARCHAR(50),
    Lname VARCHAR(50),
    Age INT,
    Gender CHAR(1),
    Password VARCHAR(50),
    City VARCHAR(50),
    email VARCHAR(50),
    secretQ VARCHAR(50)
);


--Create Sellers Table
    CREATE TABLE Sellers (
    S_ID INT PRIMARY KEY,
    UserId INT FOREIGN KEY REFERENCES Users(UserId),
    Pass VARCHAR(50)
);

--Create Products Table
CREATE TABLE Products (
    Pro_Id INT PRIMARY KEY,
	S_ID INT FOREIGN KEY REFERENCES Sellers(S_ID),
    Name VARCHAR(50),
    City VARCHAR(50),
    Price FLOAT,
    Detail VARCHAR(MAX),
    History VARCHAR(MAX),
    Ingredients VARCHAR(MAX)
);




--Create Orders Table
CREATE TABLE Orders (
    Ord_Id INT PRIMARY KEY,
    UserID INT FOREIGN KEY REFERENCES Users(UserId),
    [Amount] FLOAT,
    [Order Date] DATE,
    Status VARCHAR(50)
);

--Create OrderDetails Table
CREATE TABLE OrderDetails (
    Ord_Id INT FOREIGN KEY REFERENCES Orders(Ord_Id),
    Pro_Id INT FOREIGN KEY REFERENCES Products(Pro_Id),
    Quantity INT,
    Price FLOAT
);

--Create Reviews Table
CREATE TABLE Reviews (
    Prod_Id INT FOREIGN KEY REFERENCES Products(Pro_Id),
    Review VARCHAR(MAX),
    User_id INT FOREIGN KEY REFERENCES Users(UserId),
    Rating FLOAT
);

--Create FoodNutrition Table
CREATE TABLE FoodNutrition (
    ProductId INT FOREIGN KEY REFERENCES Products(Pro_Id),
    Calories FLOAT,
    Carbohydrates FLOAT,
    Fibre FLOAT,
	Protein Float

);

--Create History Table
CREATE TABLE History (
    ProductId INT FOREIGN KEY REFERENCES Products(Pro_Id),
	ProductAGE INT,
    History VARCHAR(MAX)
);

--Create AddToCart Table
CREATE TABLE AddToCart (
    UserId INT FOREIGN KEY REFERENCES Users(UserId),
    ProId INT FOREIGN KEY REFERENCES Products(Pro_Id),
    Quantity INT
);



