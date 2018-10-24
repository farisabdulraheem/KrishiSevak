
// Helpers/Settings.cs This file was automatically added when you installed the Settings Plugin. If you are not using a PCL then comment this file back in to use it.
using Plugin.Settings;
using Plugin.Settings.Abstractions;

namespace krishisevak.Helpers
{
  /// <summary>
  /// This is the Settings static class that can be used in your Core solution or in any
  /// of your client applications. All settings are laid out the same exact way with getters
  /// and setters. 
  /// </summary>
  public static class Settings
  {
    private static ISettings AppSettings
    {
      get
      {
        return CrossSettings.Current;
      }
    }

    #region Setting Constants

    private const string Names = "user_name";
		private const string Id = "User_id";
		private const string mobileno = "phone_no";
		private const string kids = "Krishibhavan_id";
		private const string uids = "Aadhar";


    private static readonly string SettingsDefault = string.Empty;

	

		#endregion


		public static string Name
    {
      get
      {
        return AppSettings.GetValueOrDefault<string>(Names, SettingsDefault);
      }
      set
      {
        AppSettings.AddOrUpdateValue<string>(Names, value);
      }
    }

		public static string userid
		{
			get
			{
				return AppSettings.GetValueOrDefault<string>(Id, SettingsDefault);
			}
			set
			{
				AppSettings.AddOrUpdateValue<string>(Id,value);
			}
		}

		public static string mobile
		{
			get
			{
				return AppSettings.GetValueOrDefault<string>(mobileno, SettingsDefault);
			}
			set
			{
				AppSettings.AddOrUpdateValue<string>(mobileno, value);
			}
		}
		public static string kid
		{
			get
			{
				return AppSettings.GetValueOrDefault<string>(kids, SettingsDefault);
			}
			set
			{
				AppSettings.AddOrUpdateValue<string>(kids, value);
			}
		}
		public static string uid
		{
			get
			{
				return AppSettings.GetValueOrDefault<string>(uids, SettingsDefault);
			}
			set
			{
				AppSettings.AddOrUpdateValue<string>(uids, value);
			}
		}


	}
}