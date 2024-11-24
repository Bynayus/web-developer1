using FirstProjeDers.Models;
using Microsoft.AspNetCore.Mvc;

namespace FirstProjeDers.Controllers
{

    [ApiController]
    [Route("[controller]")]
    public class UserController : ControllerBase
    {
        private static List<UserModel> _users = new List<UserModel>()
        {
            new UserModel{UserId =1,UserName="Muro",UserUnvan="Developer"},
            new UserModel{UserId =1,UserName="Eren",UserUnvan=":NET Develper"},
            new UserModel{UserId =1,UserName="Efe",UserUnvan="Php Developer"}
        };
        [HttpGet("List")]
        public  IActionResult UserList()
        {
            return Ok(_users);
        }
        [HttpGet("id")]
        public IActionResult GetActionResult(int id)
        {
            var user = _users.FirstOrDefault(p => p.UserId == id);
            if (user == null)
            {
                return NotFound(new { Message = "Kullanıcı Bulunamadı" });
            }
            return Ok(user);
        }


        [HttpPost]
        public IActionResult UserAdd(UserModel NewUser)
    }



}
