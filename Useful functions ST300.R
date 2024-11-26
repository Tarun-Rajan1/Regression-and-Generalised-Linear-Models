# ====================================================
# Table of Contents
# ====================================================
# 1. Environment Setup
# 2. Data Manipulation
# 3. Data Visualisation and Plots
# 4. Statistical Functions
# 5. Other
# ====================================================

# ---- 1. Environment Setup ----

# Install required packages
install.packages("texreg")
if (!require(ggplot2)) install.packages("ggplot2")

# Load packages
library(texreg)

# Read in the CSV file
ads <- read.csv(file = "Advertising.csv")


# ---- 2. Data Manipulation ----

# Set random seed for reproducibility
set.seed(123)

# View and inspect the data
head(ads)        # First six rows
View(ads)        # Open in a new tab
str(ads)         # Structure of the dataset

#Prints out a matrix 
model.matrix(lm_sales_TV)

# Rename columns for consistency (example renaming)
names(ads) <- c("TV", "Radio", "Newspaper", "Sales")

# Create new variables
ads <- transform(ads, log_sales = log(Sales))  # Add log-transformed sales

# Filter data (e.g., for specific conditions)
ads_filtered <- ads[ads$Sales > 10, ]  # Sales greater than 10

# Sample a subset of data
sample_data <- sample(ads$Sales, size = 5, replace = FALSE)

# Replicate values in a sequence
replicated_values <- rep(1:5, each = 3)

# Apply a function to elements in a list
applied_result <- lapply(1:5, function(k) k^2)



# ---- 3. Data Visualisation and Plots ----

# Scatter plot with regression line

# ggplot initialization (example with blank features)
ggplot(data = ads, aes(x = Sales, y = TV)) +
  geom_line(color = "") +     # Line graph
  geom_point() +              # Scatter plot
  theme_bw()


# ---- 4. Statistical Functions ----

# Correlation between two variables
cor(ads$Sales, ads$TV)

# Linear regression
lm(Sales ~ TV , data = ads)

# Summary statistics of the model
summary(lm_model)

# Confidence intervals for regression coefficients
confint(lm_model, level = 0.9)

#Multiple linear regression 
lm(Sales ~ TV + Newspaper + Radio, data = ads) #Method 1 (add together the X variables) 
lm(sales ~ ., data = ads) #Method 2: MLR of Y against everything else

# Generate random numbers from a normal distribution
random_data <- rnorm(100, mean = 0, sd = 1)

# Matrix operations
beta <- c(1, 2)
X <- matrix(c(1, 0, 0, 1), nrow = 2)
matrix_multiplication <- X %*% beta  # Matrix multiplication

# Extract model components
residuals <- resid(lm_model)      # Residuals
coefficients <- coef(lm_model)    # Coefficients
fitted_values <- fitted(lm_model) # Fitted values

# Confidence interval
new_ci <- predict(galton_fit, new_data, interval = "confidence")
# Prediction interval 
new_pi <- predict(galton_fit, new_data, interval = "prediction")


#Linear hypothesis test 
linearHypothesis(data, c(""))


# Returns the largest integer not greater than the input
floor_value <- floor(100 / 3)




# ---- 5. Other ----

# Print formatted strings
formatted_string <- sprintf("The mean of sales is %.2f", mean(ads$Sales))

# Convert output to ASCII for Word
screenreg(lm_model)

# Generate LATEX code, HTML, and ASCII tables
stargazer(lm_model, type = "latex", title = "Table 1")

# Stop function in a condition
if (det(X) == 0) {
  stop("Matrix is not invertible.")
}

# Concatenate strings with evaluations
cat("Matrix multiplication result:", matrix_multiplication, "\n")



  
