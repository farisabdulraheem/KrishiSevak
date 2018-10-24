using System;
using System.Collections.Generic;
using Newtonsoft.Json;

namespace krishisevak.Models
{
public class Schemelist
{
    
    public string Not_id { get; set; }
   
    public string KrishiBhavan_id { get; set; }
    
    public string Not_title { get; set; }
   
    public string Is_date { get; set; }
   
    public string Lt_date { get; set; }
 
    public string Descp { get; set; }
   
    public string Max_roll { get; set; }
}
public class schemeobject
{
		public List<Schemelist> schemelist { get; set; }

		public static implicit operator schemeobject(string v)
		{
			throw new NotImplementedException();
		}
	}
	}