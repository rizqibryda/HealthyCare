import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet(name = "Auth", urlPatterns = {"/auth"})
public class AuthController extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        request.getRequestDispatcher("login.jsp").forward(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String username = request.getParameter("user");
        String password = request.getParameter("pass");

        // Validate credentials (replace with your actual authentication logic)
        if (username != null && password != null &&
                username.equals("admin") && password.equals("admin123")) {

            // Login successful: create a session and set a user attribute
            HttpSession session = request.getSession(true);
            session.setAttribute("user", username);

            // Redirect to the home page
            response.sendRedirect("home");
            return;
        }

        // Login failed: set an error message and forward to the login page
        request.setAttribute("msg", "Username/password salah wak.");
        request.getRequestDispatcher("login.jsp").forward(request, response);
    }
}