using System;
using System.Collections.Generic;
using Newtonsoft.Json;

namespace krishisevak.Models
{
	public class UserInfo
	{
		
		public string User_id { get; set; }

		public string Password { get; set; }

		public string KrishiBhavan_id { get; set; }
	
		public string Name { get; set; }

		public string Phone_no { get; set; }

		public string Land_own { get; set; }
	
		public string Aadhar_no { get; set; }
	}

	public class RootObject
	{
		
	public List<UserInfo> users { get; set; }



	}
}