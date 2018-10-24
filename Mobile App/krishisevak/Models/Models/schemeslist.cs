using System;
using System.Collections.Generic;
using Newtonsoft.Json;

namespace krishisevak.Models
{
public class Schemelist
{
    public string __invalid_name__0 { get; set; }
    public string Not_id { get; set; }
    public string __invalid_name__1 { get; set; }
    public string KrishiBhavan_id { get; set; }
    public string __invalid_name__2 { get; set; }
    public string Not_title { get; set; }
    public string __invalid_name__3 { get; set; }
    public string Is_date { get; set; }
    public string __invalid_name__4 { get; set; }
    public string Lt_date { get; set; }
    public string __invalid_name__5 { get; set; }
    public string Descp { get; set; }
    public string __invalid_name__6 { get; set; }
    public string Max_roll { get; set; }
}
public class schemeobject
{
		public List<Schemelist> schemelist { get; set; }
}
	}