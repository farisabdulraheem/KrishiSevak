/* This source code was produced by mkbundle, do not edit */

#ifndef NULL
#define NULL (void *)0
#endif

typedef struct {
	const char *name;
	const unsigned char *data;
	const unsigned int size;
} MonoBundledAssembly;
void          mono_register_bundled_assemblies (const MonoBundledAssembly **assemblies);
void          mono_register_config_for_assembly (const char* assembly_name, const char* config_xml);

typedef struct _compressed_data {
	MonoBundledAssembly assembly;
	int compressed_size;
} CompressedAssembly;

extern const unsigned char assembly_data_krishisevak_dll [];
static CompressedAssembly assembly_bundle_krishisevak_dll = {{"krishisevak.dll", assembly_data_krishisevak_dll, 20480}, 8866};
extern const unsigned char assembly_data_Newtonsoft_Json_dll [];
static CompressedAssembly assembly_bundle_Newtonsoft_Json_dll = {{"Newtonsoft.Json.dll", assembly_data_Newtonsoft_Json_dll, 468480}, 186573};
extern const unsigned char assembly_data_Plugin_Settings_Abstractions_dll [];
static CompressedAssembly assembly_bundle_Plugin_Settings_Abstractions_dll = {{"Plugin.Settings.Abstractions.dll", assembly_data_Plugin_Settings_Abstractions_dll, 5120}, 1671};
extern const unsigned char assembly_data_Plugin_Settings_dll [];
static CompressedAssembly assembly_bundle_Plugin_Settings_dll = {{"Plugin.Settings.dll", assembly_data_Plugin_Settings_dll, 10752}, 4589};
extern const unsigned char assembly_data_Java_Interop_dll [];
static CompressedAssembly assembly_bundle_Java_Interop_dll = {{"Java.Interop.dll", assembly_data_Java_Interop_dll, 124464}, 40252};
extern const unsigned char assembly_data_Mono_Android_dll [];
static CompressedAssembly assembly_bundle_Mono_Android_dll = {{"Mono.Android.dll", assembly_data_Mono_Android_dll, 25126448}, 5459582};
extern const unsigned char assembly_data_System_Core_dll [];
static CompressedAssembly assembly_bundle_System_Core_dll = {{"System.Core.dll", assembly_data_System_Core_dll, 948784}, 322167};
extern const unsigned char assembly_data_System_dll [];
static CompressedAssembly assembly_bundle_System_dll = {{"System.dll", assembly_data_System_dll, 2235424}, 780992};
extern const unsigned char assembly_data_System_Net_Http_dll [];
static CompressedAssembly assembly_bundle_System_Net_Http_dll = {{"System.Net.Http.dll", assembly_data_System_Net_Http_dll, 131128}, 55334};
extern const unsigned char assembly_data_System_Xml_dll [];
static CompressedAssembly assembly_bundle_System_Xml_dll = {{"System.Xml.dll", assembly_data_System_Xml_dll, 2572840}, 836444};
extern const unsigned char assembly_data_mscorlib_dll [];
static CompressedAssembly assembly_bundle_mscorlib_dll = {{"mscorlib.dll", assembly_data_mscorlib_dll, 3731496}, 1295594};
extern const unsigned char assembly_data_System_Threading_dll [];
static CompressedAssembly assembly_bundle_System_Threading_dll = {{"System.Threading.dll", assembly_data_System_Threading_dll, 12344}, 6674};
extern const unsigned char assembly_data_System_Runtime_dll [];
static CompressedAssembly assembly_bundle_System_Runtime_dll = {{"System.Runtime.dll", assembly_data_System_Runtime_dll, 20016}, 9041};
extern const unsigned char assembly_data_System_ComponentModel_Composition_dll [];
static CompressedAssembly assembly_bundle_System_ComponentModel_Composition_dll = {{"System.ComponentModel.Composition.dll", assembly_data_System_ComponentModel_Composition_dll, 277592}, 109656};
extern const unsigned char assembly_data_System_Collections_dll [];
static CompressedAssembly assembly_bundle_System_Collections_dll = {{"System.Collections.dll", assembly_data_System_Collections_dll, 11832}, 6554};
extern const unsigned char assembly_data_System_Collections_Concurrent_dll [];
static CompressedAssembly assembly_bundle_System_Collections_Concurrent_dll = {{"System.Collections.Concurrent.dll", assembly_data_System_Collections_Concurrent_dll, 11856}, 6411};
extern const unsigned char assembly_data_System_Diagnostics_Debug_dll [];
static CompressedAssembly assembly_bundle_System_Diagnostics_Debug_dll = {{"System.Diagnostics.Debug.dll", assembly_data_System_Diagnostics_Debug_dll, 11336}, 6356};
extern const unsigned char assembly_data_System_Reflection_dll [];
static CompressedAssembly assembly_bundle_System_Reflection_dll = {{"System.Reflection.dll", assembly_data_System_Reflection_dll, 12344}, 6644};
extern const unsigned char assembly_data_System_Linq_dll [];
static CompressedAssembly assembly_bundle_System_Linq_dll = {{"System.Linq.dll", assembly_data_System_Linq_dll, 10800}, 6280};
extern const unsigned char assembly_data_System_Runtime_InteropServices_dll [];
static CompressedAssembly assembly_bundle_System_Runtime_InteropServices_dll = {{"System.Runtime.InteropServices.dll", assembly_data_System_Runtime_InteropServices_dll, 14416}, 7445};
extern const unsigned char assembly_data_System_Runtime_Extensions_dll [];
static CompressedAssembly assembly_bundle_System_Runtime_Extensions_dll = {{"System.Runtime.Extensions.dll", assembly_data_System_Runtime_Extensions_dll, 11848}, 6449};
extern const unsigned char assembly_data_System_Reflection_Extensions_dll [];
static CompressedAssembly assembly_bundle_System_Reflection_Extensions_dll = {{"System.Reflection.Extensions.dll", assembly_data_System_Reflection_Extensions_dll, 11344}, 6272};
extern const unsigned char assembly_data_System_Runtime_Serialization_dll [];
static CompressedAssembly assembly_bundle_System_Runtime_Serialization_dll = {{"System.Runtime.Serialization.dll", assembly_data_System_Runtime_Serialization_dll, 895056}, 285609};
extern const unsigned char assembly_data_System_ServiceModel_Internals_dll [];
static CompressedAssembly assembly_bundle_System_ServiceModel_Internals_dll = {{"System.ServiceModel.Internals.dll", assembly_data_System_ServiceModel_Internals_dll, 234576}, 91137};
extern const unsigned char assembly_data_System_IO_dll [];
static CompressedAssembly assembly_bundle_System_IO_dll = {{"System.IO.dll", assembly_data_System_IO_dll, 11304}, 6422};
extern const unsigned char assembly_data_System_Threading_Tasks_dll [];
static CompressedAssembly assembly_bundle_System_Threading_Tasks_dll = {{"System.Threading.Tasks.dll", assembly_data_System_Threading_Tasks_dll, 12352}, 6708};
extern const unsigned char assembly_data_System_Xml_XDocument_dll [];
static CompressedAssembly assembly_bundle_System_Xml_XDocument_dll = {{"System.Xml.XDocument.dll", assembly_data_System_Xml_XDocument_dll, 11840}, 6486};
extern const unsigned char assembly_data_System_Xml_Linq_dll [];
static CompressedAssembly assembly_bundle_System_Xml_Linq_dll = {{"System.Xml.Linq.dll", assembly_data_System_Xml_Linq_dll, 140344}, 54892};
extern const unsigned char assembly_data_System_Globalization_dll [];
static CompressedAssembly assembly_bundle_System_Globalization_dll = {{"System.Globalization.dll", assembly_data_System_Globalization_dll, 11840}, 6420};
extern const unsigned char assembly_data_System_Runtime_Serialization_Primitives_dll [];
static CompressedAssembly assembly_bundle_System_Runtime_Serialization_Primitives_dll = {{"System.Runtime.Serialization.Primitives.dll", assembly_data_System_Runtime_Serialization_Primitives_dll, 12392}, 6600};
extern const unsigned char assembly_data_System_Linq_Expressions_dll [];
static CompressedAssembly assembly_bundle_System_Linq_Expressions_dll = {{"System.Linq.Expressions.dll", assembly_data_System_Linq_Expressions_dll, 13384}, 6869};
extern const unsigned char assembly_data_System_Dynamic_Runtime_dll [];
static CompressedAssembly assembly_bundle_System_Dynamic_Runtime_dll = {{"System.Dynamic.Runtime.dll", assembly_data_System_Dynamic_Runtime_dll, 12352}, 6577};
extern const unsigned char assembly_data_System_ObjectModel_dll [];
static CompressedAssembly assembly_bundle_System_ObjectModel_dll = {{"System.ObjectModel.dll", assembly_data_System_ObjectModel_dll, 11832}, 6502};
extern const unsigned char assembly_data_System_Text_RegularExpressions_dll [];
static CompressedAssembly assembly_bundle_System_Text_RegularExpressions_dll = {{"System.Text.RegularExpressions.dll", assembly_data_System_Text_RegularExpressions_dll, 11344}, 6357};
extern const unsigned char assembly_data_System_Xml_ReaderWriter_dll [];
static CompressedAssembly assembly_bundle_System_Xml_ReaderWriter_dll = {{"System.Xml.ReaderWriter.dll", assembly_data_System_Xml_ReaderWriter_dll, 11848}, 6553};
extern const unsigned char assembly_data_System_Text_Encoding_dll [];
static CompressedAssembly assembly_bundle_System_Text_Encoding_dll = {{"System.Text.Encoding.dll", assembly_data_System_Text_Encoding_dll, 11840}, 6399};
extern const unsigned char assembly_data_System_Text_Encoding_Extensions_dll [];
static CompressedAssembly assembly_bundle_System_Text_Encoding_Extensions_dll = {{"System.Text.Encoding.Extensions.dll", assembly_data_System_Text_Encoding_Extensions_dll, 11352}, 6349};
extern const unsigned char assembly_data_Microsoft_CSharp_dll [];
static CompressedAssembly assembly_bundle_Microsoft_CSharp_dll = {{"Microsoft.CSharp.dll", assembly_data_Microsoft_CSharp_dll, 37432}, 16969};
extern const unsigned char assembly_data_Mono_CSharp_dll [];
static CompressedAssembly assembly_bundle_Mono_CSharp_dll = {{"Mono.CSharp.dll", assembly_data_Mono_CSharp_dll, 1365552}, 486065};
extern const unsigned char assembly_data_System_Resources_ResourceManager_dll [];
static CompressedAssembly assembly_bundle_System_Resources_ResourceManager_dll = {{"System.Resources.ResourceManager.dll", assembly_data_System_Resources_ResourceManager_dll, 11352}, 6335};

static const CompressedAssembly *compressed [] = {
	&assembly_bundle_krishisevak_dll,
	&assembly_bundle_Newtonsoft_Json_dll,
	&assembly_bundle_Plugin_Settings_Abstractions_dll,
	&assembly_bundle_Plugin_Settings_dll,
	&assembly_bundle_Java_Interop_dll,
	&assembly_bundle_Mono_Android_dll,
	&assembly_bundle_System_Core_dll,
	&assembly_bundle_System_dll,
	&assembly_bundle_System_Net_Http_dll,
	&assembly_bundle_System_Xml_dll,
	&assembly_bundle_mscorlib_dll,
	&assembly_bundle_System_Threading_dll,
	&assembly_bundle_System_Runtime_dll,
	&assembly_bundle_System_ComponentModel_Composition_dll,
	&assembly_bundle_System_Collections_dll,
	&assembly_bundle_System_Collections_Concurrent_dll,
	&assembly_bundle_System_Diagnostics_Debug_dll,
	&assembly_bundle_System_Reflection_dll,
	&assembly_bundle_System_Linq_dll,
	&assembly_bundle_System_Runtime_InteropServices_dll,
	&assembly_bundle_System_Runtime_Extensions_dll,
	&assembly_bundle_System_Reflection_Extensions_dll,
	&assembly_bundle_System_Runtime_Serialization_dll,
	&assembly_bundle_System_ServiceModel_Internals_dll,
	&assembly_bundle_System_IO_dll,
	&assembly_bundle_System_Threading_Tasks_dll,
	&assembly_bundle_System_Xml_XDocument_dll,
	&assembly_bundle_System_Xml_Linq_dll,
	&assembly_bundle_System_Globalization_dll,
	&assembly_bundle_System_Runtime_Serialization_Primitives_dll,
	&assembly_bundle_System_Linq_Expressions_dll,
	&assembly_bundle_System_Dynamic_Runtime_dll,
	&assembly_bundle_System_ObjectModel_dll,
	&assembly_bundle_System_Text_RegularExpressions_dll,
	&assembly_bundle_System_Xml_ReaderWriter_dll,
	&assembly_bundle_System_Text_Encoding_dll,
	&assembly_bundle_System_Text_Encoding_Extensions_dll,
	&assembly_bundle_Microsoft_CSharp_dll,
	&assembly_bundle_Mono_CSharp_dll,
	&assembly_bundle_System_Resources_ResourceManager_dll,
	NULL
};

static char *image_name = "krishisevak.dll";

static void install_dll_config_files (void (register_config_for_assembly_func)(const char *, const char *)) {

}

static const char *config_dir = NULL;
static MonoBundledAssembly **bundled;

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <zlib.h>

static int
my_inflate (const Byte *compr, uLong compr_len, Byte *uncompr, uLong uncompr_len)
{
	int err;
	z_stream stream;

	memset (&stream, 0, sizeof (z_stream));
	stream.next_in = (Byte *) compr;
	stream.avail_in = (uInt) compr_len;

	// http://www.zlib.net/manual.html
	err = inflateInit2 (&stream, 16+MAX_WBITS);
	if (err != Z_OK)
		return 1;

	for (;;) {
		stream.next_out = uncompr;
		stream.avail_out = (uInt) uncompr_len;
		err = inflate (&stream, Z_NO_FLUSH);
		if (err == Z_STREAM_END) break;
		if (err != Z_OK) {
			printf ("%d\n", err);
			return 2;
		}
	}

	err = inflateEnd (&stream);
	if (err != Z_OK)
		return 3;

	if (stream.total_out != uncompr_len)
		return 4;
	
	return 0;
}

void mono_mkbundle_init (void (register_bundled_assemblies_func)(const MonoBundledAssembly **), void (register_config_for_assembly_func)(const char *, const char *))
{
	CompressedAssembly **ptr;
	MonoBundledAssembly **bundled_ptr;
	Bytef *buffer;
	int nbundles;

	install_dll_config_files (register_config_for_assembly_func);

	ptr = (CompressedAssembly **) compressed;
	nbundles = 0;
	while (*ptr++ != NULL)
		nbundles++;

	bundled = (MonoBundledAssembly **) malloc (sizeof (MonoBundledAssembly *) * (nbundles + 1));
	bundled_ptr = bundled;
	ptr = (CompressedAssembly **) compressed;
	while (*ptr != NULL) {
		uLong real_size;
		uLongf zsize;
		int result;
		MonoBundledAssembly *current;

		real_size = (*ptr)->assembly.size;
		zsize = (*ptr)->compressed_size;
		buffer = (Bytef *) malloc (real_size);
		result = my_inflate ((*ptr)->assembly.data, zsize, buffer, real_size);
		if (result != 0) {
			fprintf (stderr, "mkbundle: Error %d decompressing data for %s\n", result, (*ptr)->assembly.name);
			exit (1);
		}
		(*ptr)->assembly.data = buffer;
		current = (MonoBundledAssembly *) malloc (sizeof (MonoBundledAssembly));
		memcpy (current, *ptr, sizeof (MonoBundledAssembly));
		current->name = (*ptr)->assembly.name;
		*bundled_ptr = current;
		bundled_ptr++;
		ptr++;
	}
	*bundled_ptr = NULL;
	register_bundled_assemblies_func((const MonoBundledAssembly **) bundled);
}
