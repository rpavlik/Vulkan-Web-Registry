<?php
$static_title = 'Khronos Vulkan Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'Vulkan Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos Vulkan Registry</h1>
<div id="mainformat">

<h1 style="text-align:center"> Khronos Vulkan Registry </h1>

<p> The Vulkan registry contains formatted specifications of the core
    Vulkan API, header files, API reference pages, the reference card,
    and related documentation. It also links to Github repositories
    where the sources for these documents can be found, as well as
    Github branches containing Khronos and vendor extension
    specifications. </p>

<p> Graphics and compute shaders for Vulkan are defined using an
    intermediate representation called SPIR-V, for which specifications
    and headers are published in the <a
    href="https://www.khronos.org/registry/spir-v/">SPIR-V Registry</a>.
    There are a variety of compilers and other tools for generating
    SPIR-V code. We encourage developers to explore related Vulkan
    material starting at the top-level <a
    href="https://www.khronos.org/vulkan/">Vulkan landing page</a>. </p>

<p> Index to the Vulkan registry page content: </p>

<ul>
    <li> <a href="#apispecs"/> <b>Vulkan API Specifications</b> </a> </li>
    <li> <a href="#dataformat"/> <b>Khronos Data Format Specification</b> </a> </li>
    <li> <a href="#styleguide"/> <b>Vulkan API Style Guide</b> </a> </li>
    <li> <a href="#refguide"/> <b>Vulkan API Reference Guide</b> </a> </li>
    <li> <a href="#refpages"/> <b>Vulkan Reference Pages</b> </a> </li>
    <li> <a href="#headers"/> <b>Vulkan Header Files</b> </a> </li>
    <li> <a href="#apiregistry"/> <b>Vulkan API Registry</b> </a> </li>
    <li> <a href="#repo-docs"/> <b>Vulkan API and Extension Specification Repository</b> </a> </li>
    <li> <a href="#repo-cts"/> <b>Vulkan Conformance Test Suite Repository</b> </a> </li>
    <li> <a href="#repo-loader"/> <b>Vulkan Loader and Validation Layers Repository</b> </a> </li>
    <li> <a href="#repo-samples"/> <b>Vulkan Sample Code Repository</b> </a> </li>
</ul>


<h2> <a name="apispecs"/> <b>Vulkan API Specifications</b> </h2>

<p> We currently publish the Vulkan API Specification in PDF and HTML
    (single-page) forms. There are two different specifications
    provided: the <b>core</b> Vulkan API, and the Vulkan API including
    the family of Window-System Interface (WSI) extensions used to post
    images to a display on different platforms and window systems. </p>

<ul>
<li> <b>Vulkan 1.0 Core API</b>
     <a href="specs/1.0/core/xhtml/vkspec.html">(HTML)</a>
     <a href="specs/1.0/core/pdf/vkspec.pdf">(PDF)</a> </li>
<li> <b>Vulkan 1.0 Core API + WSI Extensions</b>
     <a href="specs/1.0/wsi/xhtml/vkspec.html">(HTML)</a>
     <a href="specs/1.0/wsi/pdf/vkspec.pdf">(PDF)</a> </li>
</ul>


<h2> <a name="dataformat"/> <b>Khronos Data Format Specification</b> </h2>

<p> The <a href="https://www.khronos.org/registry/dataformat/"> Data
    Format Specification</a> (version 1.1) defines compressed texture
    formats used by Vulkan, and portions of that specification are
    incorporated into the Vulkan API Specification by reference. </p>


<h2> <a name="styleguide"/> <b>Vulkan API Style Guide</b> </h2>

<p> The <a href="specs/1.0/core/styleguide.html">API Style Guide</a>
    defines conventions and best practices used in writing the API
    Specification. Authors wishing to write Vulkan extension
    specifications should familiarize themselves with the style guide
    and follow its recommendations. </p>


<h2> <a name="refguide"/> <b>Vulkan API Reference Guide</b> </h2>

<p> The <a href="specs/1.0/refguide/refguide.pdf">API Reference
    Guide</a> is a compact document summarizing the Vulkan API commands,
    structures, and enumerants. </p>


<h2> <a name="refpages"/> <b>Vulkan Reference Pages</b> </h2>

<p> The Vulkan API Reference Pages describe how to use individual core
    API and extension commands. The goal is to define all commands and
    structures in the core API and extensions, although there may be
    some omissions. In addition to the formats published here, it is
    possible to generate other formats from the reference page sources,
    such as Unix nroff man page sources.</p>

<ul>
<li> <b>Vulkan 1.0 Reference Pages</b>
     <a href="specs/1.0/core/apispec.pdf">(PDF, single file)</a>
     <a href="specs/1.0/core/apispec.html">(HTML, single file)</a>
     <a href="specs/1.0/core/man/html/">(HTML, one file per reference page)</a>
     </li>
</ul>


<h2> <a name="repo-docs"/> <b>Vulkan API and Extension Specification Repository</b> </h2>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Docs">
    Vulkan-Docs</a> repository contains the Asciidoc source for the
    Vulkan core API specification, and for registered Vulkan API
    extensions. Each extension exists on a separate git branch.
    Registered branches include: </p>

<ul>
    <li> <a href="tree/1.0">			       Vulkan 1.0		core API branch  </a> </li>
    <li> <a href="tree/1.0-VK_KHR_surface">	       VK_KHR_surface		extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_swapchain">	       VK_KHR_swapchain		extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_display">	       VK_KHR_display		extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_display_swapchain">  VK_KHR_display_swapchain extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_xlib_surface">       VK_KHR_xlib_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_xcb_surface">        VK_KHR_xcb_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_wayland_surface">    VK_KHR_wayland_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_mir_surface">        VK_KHR_mir_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_android_surface">    VK_KHR_android_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_KHR_win32_surface">      VK_KHR_win32_surface	extension branch </a> </li>
    <li> <a href="tree/1.0-VK_ANDROID_native_buffer">  VK_ANDROID_native_buffer extension branch </a> </li>
    <li> <a href="tree/1.0-VK_EXT_debug_report">       VK_EXT_debug_report	extension branch </a> </li>
</ul>

<p> Currently, this repository also contains the header files, API
    Registry, and reference page sources. We hope to soon refactor the
    repositories to separate these documents from the specifications.
    </p>


<h2> <a name="headers"/> <b>Vulkan Header Files</b> </h2>

<p> For most developers, the header files provided with a loader and/or
    driver package, such as the one defined in the <a
    href="#repo-loader"> loader and validation layers</a> Github
    repository, are all that's needed. </p>

<p> However, all Vulkan headers provided by Khronos are ultimately
    obtained from the <a href="#repo-docs"> Vulkan-Docs</a> repository
    You may clone this repository and copy the headers from
    <b>src/vulkan/vulkan.h</b> and <b>src/vulkan/vk_platform.h</b>; or,
    if you need to generate a customized version of the headers, use the
    <a href="#apiregistry">API Registry</a> and scripts under
    <b>src/spec/</b>. </p>

<p> <i>Note: we hope to soon refactor the repositories to separate the
    headers from the specifications</i>. </p>


<h2> <a name="apiregistry"/> <b>Vulkan API Registry</b> </h2>

<p> Vulkan defines an API Registry for the core API and extensions,
    formally defining command prototypes, structures, enumerants, and
    many other aspects of the API and extension mechanisms. The Vulkan
    Registry is used for many more purposes than most other Khronos API
    registries, and is the basis for generating the header files;
    Asciidoc include files used in the Specification, and reference
    pages for interface definitions, parameter and member validity
    language, and synchronization language; and more. </p>

<p> The Registry is in an XML file called <b>vk.xml</b> and currently
    located in the <a href="#repo-docs"> Vulkan-Docs</a> repository
    under <b>src/spec</b>. This directory also includes a formal Relax
    NG XML schema, documentation of the schema, and scripts used to
    generate the various outputs. </p>


<h2> <a name="repo-cts"/> <b>Vulkan Conformance Test Suite Repository</b> </h2>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-CTS">
    Vulkan-CTS</a> repository contains the source code for the Vulkan
    Conformance Tests. Note that while the CTS source code is freely
    available, you must be a Khronos Adopter and pay the Adopter Fee in
    order to use the Vulkan trademark for your implementation. </p>


<h2> <a name="repo-loader"/> <b>Vulkan Loader and Validation Layers Repository</b> </h2>

<p> The <a
    href="https://github.com/KhronosGroup/Vulkan-LoaderAndValidationLayers">
    Vulkan-LoaderAndValidationLayers</a> repository contains source code
    implementing a loader for hardware drivers, and a variety of
    validation layers which may be enabled during development. This code
    is also available in packages published at
	*** <i> TBD: link to release loader/layer packages </i> ***
    </p>


<h2> <a name="repo-samples"/> <b>Vulkan Sample Code Repository</b> </h2>

<p> The <a href="https://github.com/KhronosGroup/Vulkan-Samples">
    Vulkan-Samples</a> repository contains sample code showing use of
    Vulkan, contributed by various Khronos members and other authors.
    </p>


<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
