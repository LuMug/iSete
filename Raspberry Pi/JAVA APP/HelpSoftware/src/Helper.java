//STEP 1. Import required packages

import java.sql.*;

public class Helper {

    // JDBC driver name and database URL
    String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    String DB_URL;
    public String[] nomiCapsule;

    //  Database credentials
    static final String USER = "root";
    static final String PASS = "root";

    public boolean connected(String name, String passwd) {
        
        DB_URL = "jdbc:mysql://localhost/test";
        
        Connection conn = null;
        Statement stmt = null;

        String insertName = name;
        String insertPassword = passwd;

        try {
            //STEP 2: Register JDBC driver
            Class.forName(JDBC_DRIVER);

            //STEP 3: Open a connection
            System.out.println("Connecting to database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);

            //STEP 4: Execute a query
            System.out.println("Creating statement...");
            stmt = conn.createStatement();
            String sql;
            PreparedStatement preparedStmt;

            sql = "SELECT Nome, Password FROM usertable";
            ResultSet rs = stmt.executeQuery(sql);

            //STEP 5: Extract data from result set
            while (rs.next()) {
                //Retrieve by column name
                String nome = rs.getString("Nome");
                String password = rs.getString("Password");

                if (insertName.equals(nome) && insertPassword.equals(password)) {
                    rs.close();
                    stmt.close();
                    conn.close();
                    return true;
                }
            }
            rs.close();
            stmt.close();
            conn.close();
        } catch (SQLException | ClassNotFoundException se) {
        }
        return false;
    }

    
    public String[] getCapsuleName(){
        
        DB_URL = "jdbc:mysql://localhost/isete";
        
        Connection conn = null;
        Statement stmt = null;

        try {
            //STEP 2: Register JDBC driver
            Class.forName(JDBC_DRIVER);

            //STEP 3: Open a connection
            System.out.println("Connecting to database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);

            //STEP 4: Execute a query
            System.out.println("Creating statement...");
            stmt = conn.createStatement();
            String sql;

            sql = "SELECT ca_tipo FROM capsula";
            ResultSet rs = stmt.executeQuery(sql);
            
            int i = 0;
            
            //STEP 5: Extract data from result set
            while (rs.next()) {
                i++;
            }
            rs.close();
            
            nomiCapsule = new String[i];
            
            sql = "SELECT ca_tipo FROM capsula";
            rs = stmt.executeQuery(sql);
            
            i = 0;
            
            //STEP 5: Extract data from result set
            while (rs.next()) {
                //Retrieve by column name
                String nome = rs.getString("ca_tipo");
                nomiCapsule[i] = nome;
                i++;
            }
            rs.close();
            stmt.close();
            conn.close();
        } catch (SQLException | ClassNotFoundException se) {
        }
        return nomiCapsule;
    }
    
    
    
    
    
    
    
    /*public void connection() {
        Connection conn = null;
        Statement stmt = null;
        try {
            //STEP 2: Register JDBC driver
            Class.forName(JDBC_DRIVER);

            //STEP 3: Open a connection
            System.out.println("Connecting to database...");
            conn = DriverManager.getConnection(DB_URL, USER, PASS);

            //STEP 4: Execute a query
            System.out.println("Creating statement...");
            stmt = conn.createStatement();
            String sql;
            PreparedStatement preparedStmt;

            sql = "update Employees set first = ? where id = ?";
             preparedStmt = conn.prepareStatement(sql);
             preparedStmt.setString(1, "Maometto");
             preparedStmt.setInt(2, 0);
             preparedStmt.execute();
            sql = "SELECT Nome, Password FROM usertable";
            ResultSet rs = stmt.executeQuery(sql);

            //STEP 5: Extract data from result set
            while (rs.next()) {
                //Retrieve by column name
                String nome = rs.getString("Nome");
                String password = rs.getString("Password");

                if (insertName.equals(nome)) {
                    System.out.println("Creating account...");
                    sql = "INSERT INTO usertable(Nome) values(?)";
                    preparedStmt = conn.prepareStatement(sql);
                    preparedStmt.setString(1, "Nicole");
                    preparedStmt.execute();
                }

                //Display values
                System.out.println("Nome: " + nome + ", Password: " + password);
            }
            //STEP 6: Clean-up environment
            rs.close();
            stmt.close();
            conn.close();
        } catch (SQLException se) {
            //Handle errors for JDBC
            se.printStackTrace();
        } catch (Exception e) {
            //Handle errors for Class.forName
            e.printStackTrace();
        } finally {
            //finally block used to close resources
            try {
                if (stmt != null) {
                    stmt.close();
                }
            } catch (SQLException se2) {
            }// nothing we can do
            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException se) {
                se.printStackTrace();
            }//end finally try
        }//end try
        System.out.println("Goodbye!");
    }*/

}
