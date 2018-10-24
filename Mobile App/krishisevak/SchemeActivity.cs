
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using Newtonsoft.Json;
using krishisevak.Helpers;
namespace krishisevak
{
	[Activity(Label = "SchemeActivity")]
	public class SchemeActivity : Activity
	{
		Models.schemeobject result;
		ListView schemelist;
		protected override void OnCreate(Bundle savedInstanceState)
		{
base.OnCreate(savedInstanceState);
			SetContentView(Resource.Layout.Scheme);
			schemelist = FindViewById<ListView>(Resource.Id.schemelist);
			loadschemes();

			schemelist.ItemClick += Schemelist_ItemClick;


			// Create your application here
		}

		void Schemelist_ItemClick(object sender, AdapterView.ItemClickEventArgs e)
		{
			String id=result.schemelist[e.Position].Not_id;
			Intent intent = new Intent(this, typeof(SchemeRequestActivity));
			intent.PutExtra("id",id);
			StartActivity(intent);
		}

		async void loadschemes()
		{
			try
			{
				using (HttpClient wc = new HttpClient())
				{
					//json = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/newlog.php?username="+username+"&password="+password+"");
					var s = await wc.GetStringAsync("https://farisk2010.000webhostapp.com/php/schemes.php?kid="+Settings.kid +"");


					result = JsonConvert.DeserializeObject<Models.schemeobject>(s);
					//	Settings.Name = result.user_info[0].Name;
					SchemesAdapter adapter = new SchemesAdapter(this, result.schemelist);

 					schemelist.Adapter = adapter;
				}
			}
			catch
			{

			}
		}
	}
}
